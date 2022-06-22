<?php


class Home extends Controller
{
  public $API_URL;
  public $API_USER;
  public $API_PASS;
  public $API_TOKEN;


  function __construct()
  {


    $this->API_URL = "https://qa.smartrans.net/api/";
    $this->API_USER = "contacto@daroagency.com";
    $this->API_PASS = "478204b9e2943c8a7222053b38ff8b8796a4e7957bb061192b0c8d7aa10e4a32";
    $this->API_TOKEN = $this->callLoginApi();
    $this->USER_ID = "8151";

    parent::__construct();
  }


  function render()
  {
    $this->view->render('home/home');
  }


  public function login_api($email, $password)
  {

    $url = $this->API_URL . 'usuarios/login';
    $headers = [
      'Content-Type:application/json',
      'apikey:YzJmZmNkMGRkYmI1MTJkMTU2NTM1NTQ0NjNlZjc5YjhjY2ZiYjYzZWFkNmNkMjZiYzk3OGJlNjY5NDY1OGM5NA==',
    ];
    $fields = json_encode([
      'email' => $email,
      'password' => $password,
      'r' => "7988096",
    ]);


    // Open connection
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

    // Execute post
    $result = curl_exec($ch);
    if ($result === false) {
      exit('Curl failed: ' . curl_error($ch));
    }

    // Close connection
    curl_close($ch);
    return $result;
  }

  public function callLoginApi()
  {
    $apiResult = json_decode($this->login_api(
      $this->API_USER,
      $this->API_PASS,
    ));

    if ($apiResult->status != 'OK') {
      error_log('Error login API');
      return false;
    } else {
      return $apiResult->token;
    }
  }

  public function listar($token, $ruta)
  {
    $url = $this->API_URL . $ruta;
    $headers = [
      'Content-Type:application/json',
      'apikey:YzJmZmNkMGRkYmI1MTJkMTU2NTM1NTQ0NjNlZjc5YjhjY2ZiYjYzZWFkNmNkMjZiYzk3OGJlNjY5NDY1OGM5NA==',
      'token:' . $token,
    ];
    /*$fields = json_encode([
        'email' => $email,
    ]);*/
    // Open connection
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, false);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

    // Execute post
    $result = curl_exec($ch);

    if ($result === false) {
      exit('Curl failed: ' . curl_error($ch));
      curl_close($ch);
    } else {

      $respuesta = json_decode($result);

      return $result;
    }

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Close connection
    curl_close($ch);

    return $httpCode;
  }

  public function temperatura()
  {

    if (isset($_POST["camionCot"])) {

      if ($_POST["camionCot"] >= 1 && $_POST["camionCot"] <= 4) {

        session_start();
        $camion = $_POST["camionCot"];
        $vehiculo = ['id', 'name', 'img'];

        switch ($camion) {
          case 1:
            $vehiculo = ['id' => 3, 'name' => 'PICKUP', 'img' =>  '1.png'];
            break;
          case 2:
            $vehiculo = ['id' => 5, 'name' => 'CAMION', 'img' =>  '2.png'];
            break;
          case 3:
            $vehiculo = ['id' => 7, 'name' => 'MULA', 'img' =>  '3.png'];
            break;
          case 4:
            $vehiculo = ['id' => 4, 'name' => 'PANEL', 'img' =>  '4.png'];
            break;
          default:
            # code...
            break;
        }

        $_SESSION['caracteristicas'] = json_decode($this->listar($this->API_TOKEN, '/vehiculos/tipos/' . $vehiculo['id'] . '/caracteristicas/idiomas/1'), true);

        $temp_disp = [];

        foreach ($_SESSION['caracteristicas'] as $resp) {
          if ($resp["caracteristicasId"] == 6) {
            $temp_disp = $resp;
          }
        }

        $_SESSION['vehiculo'] = $vehiculo;
        //$this->view->vehiculo = $vehiculo;
        $this->view->temperaturas = $temp_disp;
        $this->view->render('libs/temperatura');
      } else {
        header('location:' . constant('URL'));
      }
    } else {
      header('location:' . constant('URL'));
    }
  }

  public function vagon()
  {

    if (isset($_POST["temp"])) {

      session_start();
      $_SESSION['temp'] = $_POST["temp"];

      $vagontip = [];

      foreach ($_SESSION['caracteristicas'] as $resp) {
        if ($resp["caracteristicasId"] == 4) {
          $vagontip = $resp;
        }
      }
      //$this->view->vehiculo = $vehiculo;
      $this->view->vagontip = $vagontip;
      $this->view->render('libs/vagon');
    } else {
      header('location:' . constant('URL'));
    }
  }

  public function tamano()
  {

    if (isset($_POST["vagontip"])) {

      session_start();
      $_SESSION['vagontip'] = $_POST["vagontip"];


      $tamanos = [];
      // 7 para tamaño
      foreach ($_SESSION['caracteristicas'] as $resp) {
        if ($resp["caracteristicasId"] == 7) {
          $tamanos = $resp;
        }
      }
      //$this->view->vehiculo = $vehiculo;
      $this->view->tamanos = $tamanos;
      $this->view->render('libs/tamano');
    } else {
      header('location:' . constant('URL'));
    }
  }

  public function carga()
  {

    if (isset($_POST["tamano"])) {

      session_start();
      $_SESSION['tamano'] = $_POST["tamano"];

      $carga = [];
      // 5 para tipo de carga
      foreach ($_SESSION['caracteristicas'] as $resp) {
        if ($resp["caracteristicasId"] == 5) {
          $carga = $resp;
        }
      }
      //$this->view->vehiculo = $vehiculo;
      $this->view->cargas = $carga;
      $this->view->render('libs/carga');
    } else {
      header('location:' . constant('URL'));
    }
  }
}
