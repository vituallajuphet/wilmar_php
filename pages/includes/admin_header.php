<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title;?></title>
        <link rel="stylesheet" href="<?=$base_url?>assets/css/boostrap.css">
        <link rel="stylesheet" href="<?=$base_url?>assets/css/admin.css">
    </head>
    <body>
        <header>
            <div class="header_cont">
                <div class="header">
                    <a href="">User Dashboard</a>
                </div>
                <div class="logout">
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="mr-5 text-white font-weight-bold">
                            <span class="user_info"><?= $user_info;?></span>
                        </div>
                        <a href="<?=$base_url?>logout">Logout</a>
                    </div>
                </div>
            </div>
        </header>
