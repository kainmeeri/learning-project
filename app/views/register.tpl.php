<div class="register">

    <form action="<?=$absoluteUrl?>" method="POST">
        <div class="field">
        <label class="label">Pseudo</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-success" type="text" placeholder="Text input" >
            <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
            </span>
            <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
            </span>
        </div>
        <p class="help is-success">This username is available</p>
        </div>

        <div class="field">
        <label class="label">Adresse e-mail</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-danger" type="email" placeholder="Email input" >
            <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
                <i class="fas fa-exclamation-triangle"></i>
            </span>
        </div>
        <p class="help is-danger">This email is invalid</p>
        </div>

        <div class="field">
        <label class="label">Mot de passe</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-danger" type="password">
            <span class="icon is-small is-left">
        </div>

        <div class="field">
        <div class="control">
            <label class="checkbox">
            <input type="checkbox">
            I agree to the <a href="">terms and conditions</a>
            </label>
        </div>
        </div>

        <div >
        <div >
            <button class="button is-link">Submit</button>
        </div>
    
        </div>
    </form>

</div>