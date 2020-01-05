<?php $v->layout("theme/_theme"); ?>

<div class="main_content_box">
    <div class="content_box_login">

        <!-- Caixa de Login -->
        <div class="login">
            <div class="login_img">
                <div class="login_img_text">
                    <h1>Bem vindo de Volta!</h1>
                    <p>Para acessar o painel basta informar seus dados ao lado! </p>
                    
                    <span>É novo por aqui? Então <a href="<?= $router->route("web.register"); ?>"><b>Crie uma conta</b></a> agora mesmo!</span>
                </div>
            </div>
            <div class="login_form">
                <h1 class="title_form">Login</h1>
            <form class="form log" action="<?= $router->route("auth.login"); ?>" method="post" autocomplete="off">

             <div class="login_form_callback">
                    <?= flash(); ?>
               </div>

               <label>
                   <input value="" type="email" name="email" placeholder="email@example.com"/>
               </label>
               <label>
                   <input autocomplete="" type="password" name="passwd" placeholder="*******"/>
               </label>

               <div class="form_actions">
                   <button class="btn btn-green btn-large">Entrar</button>
                   <a href="<?= $router->route("web.forget"); ?>" title="Recuperar Senha">Esqueceu a Senha?</a>
               </div>

               <div class="separator">
                   <img src="views/assets/images/SVG_separator.svg" alt="">
               </div>

               <!-- <div class="form_social">
                   <a href="<?= $router->route("auth.facebook"); ?>" class="btn btn-facebook">Entrar com Facebook</a>
                   <a href="<?= $router->route("auth.google"); ?>" class="btn btn-google">Entrar com Google</a>
               </div> -->

           </form>
            </div>
        </div>

    </div>
</div>

<?php $v->start("scripts"); ?>
<script src="<?= asset("/js/form.js"); ?>"></script>
<?php $v->end(); ?>
