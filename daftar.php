<?php include 'template/header.php'; ?>

<div class="columns">
    <div class="column is-half">
        <button class="button is-small">
            <span class="icon">
                <i class="fa-regular fa-user-plus"></i>
            </span>
            <span class="has-text-weight-semibold">Daftar</span>
        </button>
        <br>
        <br>
        <form autocomplete="off" action="proses.php" method="POST">
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input class="input is-small" type="username" name="username" placeholder="Username">
                    <span class="icon is-small is-left"><i class="fa-regular fa-user"></i></span>
                </p>
            </div>
            <div class="field">
                <p class="control has-icons-left">
                    <input class="input is-small" type="password" name="password" placeholder="Password">
                    <span class="icon is-small is-left"><i class="fa-duotone fa-key"></i></span>
                </p>
            </div>
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input class="input is-small" type="text" name="name" placeholder="Name">
                    <span class="icon is-small is-left"><i class="fa-regular fa-user"></i></span>
                </p>
            </div>
            <div class="field">
                <p class="control has-icons-left has-icons-right">
                    <input class="input is-small" type="email" name="email" placeholder="Email">
                    <span class="icon is-small is-left"><i class="fa-regular fa-envelope-dot"></i></span>
                </p>
            </div>
            <div class="select is-small">
                <select name="status">
                    <option value="aktif">Aktif</option>
                    <option value="tidak aktif" selected>Tidak Aktif</option>
                </select>   
            </div>
            <br>
            <br>
            <input type="hidden" name="action" value="daftar">
            <button class="button is-small is-info">
                <span class="icon is-small">
                    <i class="fa-regular fa-file-import"></i>
                </span>
                <span>Kirim</span>
            </button>
        </form>
    </div>
</div>


<?php include 'template/footer.php'; ?>