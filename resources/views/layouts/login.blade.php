
<!-- W3hubs.com - Download Free Responsive Website Layout Templates designed on HTML5 CSS3,Bootstrap which are 100% Mobile friendly. w3Hubs all Layouts are responsive cross browser supported, best quality world class designs. -->
<html>
  <head>
    <title>Simple Login Form In Materializecss</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="{{ asset('template/css//materialize.css')}}" type="text/css" rel="stylesheet">
    <style>
      body {
      background: #F8F8F8;
      font-family: 'Muli', sans-serif;
      }
      .input-field input[type=date]:focus + label,
      .input-field input[type=text]:focus + label,
      .input-field input[type=email]:focus + label,
      .input-field input[type=password]:focus + label {
      color: #3f50b5;
      }
      .input-field input[type=date]:focus,
      .input-field input[type=text]:focus,
      .input-field input[type=email]:focus,
      .input-field input[type=password]:focus {
      border-bottom: 2px solid #3f50b5;
      box-shadow: none;
      }
      .input-field label{
      left: 0;
      }
      form{
      margin: 30px auto;
      align-items: center;
      justify-content: center;
      width: 45%;
      }
      .btn-large{
      height: 45px;
      line-height:45px;
      }
      .m-b-none{
      margin-bottom: 0;
      }
      .padder-x{
      padding: 0 !important;
      }
      .m-md{
      margin-top: 10px;
      margin-bottom: 20px;
      }
      .forgotpassword{
      font-weight: bold;
      }
      h2{
      margin-top: 50px;
      font-weight: 400
      letter-spacing: 2px;
      padding:20px;
      }
      @media(max-width: 700px){
      form{
      width: 60%;
      }
      }
      @media(max-width: 530px){
      form{
      width: 70%;
      }
      }
      @media(max-width: 450px){
      form{
      width: 80%;
      }
      }
    </style>
  </head>
  <body>
    <div class="container">
    @yield ('content')
    </div>
    <script type="text/javascript" src="{{ asset('template/vendors/jquery-3.2.1.min.js')}}"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{{ asset('template/js/materialize.min.js')}}"></script>
  </body>
</html>