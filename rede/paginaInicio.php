<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Language" content="pt-br, en, fr, it">
	<title>Hello World</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        

<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js'></script>
<script type="text/javascript" src="jquery-1.12.4.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="post.css"> <!--completar aki-->
<script type="text/javascript" src="post.js"></script>



</head>
<body>

<div id="wrapper">
 <section id="content-wrapper">
   
 </section> 
</div>
<div class="containers">
  <div class="barraDeMenu" style="background-color: #35465E;">
   <div class="container-fluid">
      <div class="navbar-header">
   	    <a href="#"><img src="redepanda.png" width="80" height="50"></a>
      </div> 
      <div class="navbar-left">
        <h4 style="color: #fff; font-style: bold;">Seja Bem Vindo</h4>
      </div>
	        <form method="POST" action="" class="navbar-form navbar-left" role="search" id="formularioBuscar">
	  	<div class="form-group">
	  		<input type="search" class="form-control" placeholder="Buscar..">
	  	  </div>
            <button type="submit" class="btn btn-default">Buscar</button>
	        </form>
            <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opções<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="#">Config</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Sair da rede</a></li>
          </ul>
      </div>
    </div>   

    <div class="panel panel-default">
      <div class="panel-body" style="background: #EDEDED;">
      <div class="box_sidebar perfil">
            
        <div class="thumbnails">
               
            <img id="GetImagem" class="img-thumbnail" >
                                      
               <input id="ocultarfile" type="file" onchange="PreviewImage();" />
               <label for="ocultarfile" class="glyphicon glyphicon-camera" rel="tooltip"></label>  
               <div class="dados_user">
                <span class="nome_perfil"><a href="#">Marcelo Mendes</a></span>
                <a href="#" class="nickname">@mendesMD5</a>
               </div>
                 <div class="status">
                   <div class="box_status">
                     <span>Fotos</span>
                     <p>35 Fotos</p>
                   </div>
                   <div class="box_status">
                     <span>Seguindo</span>
                     <p>111</p>
                   </div>
                   <div class="box_status">
                     <span>Seguidores</span>
                     <p>200</p>
                   </div>
                 </div>
                
                <div style="clear: both;"></div>
           
                <nav > 
                  <ul class="menu">
                    <li><a href="#">Perfil</a></li>
                    <li><a href="#">Albuns</a></li>
                    <li><a href="#" onclick="chamar();">Amigos</a></li>
                  </ul>
                </nav>
        </div>
               
      </div>       <!--MEU POST DE OBJETOS -->
            <div class="postPai" ng-app="commentsApp" ng-controller="CommentsController as cmntCtrl">
  <!-- From -->
  <div class="comment-form">
    <!-- Comment Avatar/avatar do posPrincipal -->
    <div class="comment-avatar">
      <img src="http://lorempixel.com/200/200/people">
    </div>

    <form class="form" name="form" ng-submit="form.$valid && cmntCtrl.addComment()" novalidate>
      <div class="form-row">
        <textarea
                  class="input"
                  ng-model="cmntCtrl.comment.text"
                  placeholder="Add comment..."
                  required></textarea>
      </div>

      
      <div class="form-row text-right">
        <input
               id="comment-anonymous"
               ng-change="cmntCtrl.anonymousChanged()"
               ng-model="cmntCtrl.comment.anonymous"
               type="checkbox">
        <label for="comment-anonymous">Anonymous</label>
      </div>

      <div class="form-row">
        <input type="submit" value="Compartilhar">
      </div>
    </form>
  </div>

  <!-- Comments List/ post secundario.. -->
  <div class="comments">
    <!-- Comment -->
    <div class="comment" ng-repeat="comment in cmntCtrl.comments | orderBy: '-date'">
      <!-- Comment Avatar -->
      <div class="comment-avatar">
        <img ng-src="{{ comment.avatarSrc }}">
      </div>

      <!-- Comment Box -->
      <div class="comment-box">
        <div class="comment-text">{{ comment.text }}</div>
        <div class="comment-footer">
          <div class="comment-info">
            <span class="comment-author">
              <em ng-if="comment.anonymous">Anonymous</em>
              <a ng-if="!comment.anonymous" href="{{ comment.author }}">{{ comment.author }}</a>
            </span>
            <span class="comment-date">{{ comment.date | date: 'medium' }}</span>
          </div>

          <div class="comment-actions">
            <a href="#">Reply</a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>  
</div>
</div>  
</body>
</html>