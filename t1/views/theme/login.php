<?php $v->layout("theme/_theme"); ?>

<div class="main_content_box">
    <div class="content_box_login">
        <div class="login_img">
            <img src="views/assets/images/SVG_ilustration.svg" alt="Login Imagem">
        </div>
        <div class="login">
            <form class="form" action="<?= $router->route("auth.login"); ?>" method="post" autocomplete="off">


                <div class="login_form_callback">
                    <?= flash(); ?>
                </div>

                <label>
                    <span class="icon_field"><img src="views/assets/images/SVG_email_icon.svg" alt=""></span>
                    <input value="" type="email" name="email" placeholder="Informe seu e-mail:"/>
                </label>
                <label>
                    <span class="icon_field"><img src="views/assets/images/SVG_lock_icon.svg" alt=""></span>
                    <input autocomplete="" type="password" name="passwd" placeholder="Informe sua senha:"/>
                </label>

                <div class="form_actions">
                    <button class="btn btn-green">Entrar</button>
                    <a href="<?= $router->route("web.forget"); ?>" title="Recuperar Senha">Esqueceu a Senha?</a>
                </div>

                <div class="separator">
                    <img src="views/assets/images/SVG_separator.svg" alt="">
                </div>

                <div class="form_social">
                    <a href="<?= $router->route("auth.facebook"); ?>" class="btn btn-facebook">Entrar com Facebook</a>
                    <a href="<?= $router->route("auth.google"); ?>" class="btn btn-google">Entrar com Google</a>
                </div>

                <div class="separator">
                    <img src="views/assets/images/SVG_separator.svg" alt="">
                </div>
            </form>

            <div class="form_register_action cad">
                <p>Ainda não tem conta?</p>
                <a href="<?= $router->route("web.register"); ?>" class="btn btn-blue cad">Criar Conta</a>
            </div>
        </div>
    </div>
</div>

<?php $v->start("scripts"); ?>
<script src="<?= asset("/js/form.js"); ?>"></script>
<?php $v->end(); ?>
