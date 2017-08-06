<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    
    <!-- JQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <!-- JQuery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>
    
    <!-- JQuery Validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    
    <!-- Bootstrap -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
 
    <!-- Menu -->
    <script type="text/javascript" src="/adm/js/menu.js"></script>
    <link rel="stylesheet" type="text/css" href="/adm/css/menu.css">

    <!-- TimePicker -->
  <script type="text/javascript" src="/js/jquery.timepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="/adm/css/jquery.timepicker.css" />
 
    <!-- Geral -->
    <link rel="stylesheet" type="text/css" href="/adm/css/geral.css">
    <!-- JS Que deve ser carregado antes da Página-->
    <script type="text/javascript" src="/adm/js/ui.js"></script>
    

</head>
<body>   
    <div id="menuPrincipal" class="menu" style="width: 46px">
        <a href="javascript:void(0)" class="botaoMenu" onclick="abrirMenu()">&plus;</a>
        <a href="/admin/index"><i class="glyphicon glyphicon-home"></i><span class="legenda"> home</span></a>
        <a href="{{route('eventos.index')}}"><i class="glyphicon glyphicon-calendar"></i><span class="legenda"> Eventos</span></a>
        <a href="{{route('videos.index')}}"><i class="glyphicon glyphicon-facetime-video"></i><span class="legenda"> Vídeos</span></a>
    </div>

    <div id="conteudo" class="conteudo">
            @yield('content')
    </div>
    <!--JavaScript Geral -->
    <script type="text/javascript" src="/adm/js/geral.js"></script>
    
</body>