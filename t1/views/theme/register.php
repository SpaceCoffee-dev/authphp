<?php $v->layout("theme/_theme"); ?>

<div class="main_content_box">
    <div class="content_box_login">
        <div class="login_img">
            <img src="views/assets/images/SVG_ilustration.svg" alt="Login Imagem">
        </div>
        <div class="login">
            <form class="form" action="<?= $router->route("auth.register"); ?>" method="post" autocomplete="off">
                <div class="login_form_callback">
                    <?= flash(); ?>
                </div>

                <div class="label_2">
                    <label>
                        <span class="icon_field"><img src="views/assets/images/SVG_user_icon.svg" alt=""></span>
                        <input value="<?= $user->first_name; ?>" type="text" name="first_name"
                               placeholder="Primeiro nome:"/>
                    </label>

                    <label>
                        <span class="icon_field"><img src="views/assets/images/SVG_user_icon.svg" alt=""></span>
                        <input value="<?= $user->last_name; ?>" type="text" name="last_name"
                               placeholder="Último nome:"/>
                    </label>
                </div>

                <label>
                    <span class="icon_field"><img src="views/assets/images/SVG_email_icon.svg" alt=""></span>
                    <input value="<?= $user->email; ?>" type="email" name="email"
                           placeholder="Informe seu e-mail:"/>
                </label>

                <label>
                    <span class="icon_field"><img src="views/assets/images/SVG_lock_icon.svg" alt=""></span>
                    <input autocomplete="" type="password" name="passwd"
                           placeholder="Informe sua senha:"/>
                </label>

                <div class="form_actions">
                    <button class="btn btn-green btn-full">Criar Conta</button>
                </div>
                <div class="separator">
                    <img src="views/assets/images/SVG_separator.svg" alt="">
                </div>
            </form>

            <div class="form_register_action cad">
                <p>Já tem conta?</p>
                <a href="<?= $router->route("web.login"); ?>" class="btn btn-blue cad">Fazer Login</a>
            </div>
        </div>
    </div>
</div>

<?php $v->start("scripts"); ?>
<script src="<?= asset("/js/form.js"); ?>"></script>
<?php $v->end(); ?>
