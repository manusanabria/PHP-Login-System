<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.10/css/uikit.min.css" />
    </head>
    <body>
    <div class="uk-section uk-container">
    <div class="uk-grid uk-child-width-1-3@s uk-clid-width-1-1" uk-grid="">
    <form class="uk-form-stacked">
        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Email</label>
            <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="email" required='required' placeholder="email@email.com">
            </div>
        </div>

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Password</label>
            <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" required='required' type="password" placeholder="Enter your password">
            </div>
        </div>

        <div class="uk-margin">
        <button class="uk-button uk-button-default"[type='submit'>Login</button>
        </div>
    </form> 
    </div>
</div>
    
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.10/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.10/js/uikit-icons.min.js"></script>
    </body>
</html>