<?php $v->layout("theme/_theme"); ?>

<div class="main_content_box">
    <div class="content_box_login reg">
        <div class="login_img reg">
                <div class="login_img_text reg">
                    
                </div>
            </div>
        <div class="login reg">
            <h3><b>É rapido e Fácil</b>, basta somente colocar seus dados abaixo e ja iremos começar!</h3>
            <form class="form reg" action="<?= $router->route("auth.register"); ?>" method="post" autocomplete="off">
                <div class="login_form_callback">
                    <?= flash(); ?>              
                </div>

                <div class="label_2">
                    <label>
                        <input value="<?= $user->first_name; ?>" type="text" name="first_name"
                               placeholder="Primeiro nome:"/>
                    </label>

                    <label>
                        <input value="<?= $user->last_name; ?>" type="text" name="last_name"
                               placeholder="Último nome:"/>
                    </label>
                </div>

                <label>
                    <input value="<?= $user->email; ?>" type="email" name="email"
                           placeholder="Informe seu e-mail:"/>
                </label>

                <label>
                    <input autocomplete="" type="password" name="passwd"
                           placeholder="Informe sua senha:"/>
                </label>

                <div class="form_actions">
                    <button class="btn btn-green btn-full btn-large">Criar Conta</button>
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
