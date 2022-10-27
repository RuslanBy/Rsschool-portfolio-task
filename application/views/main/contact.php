<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./normalize.css" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="icon" href="assets/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Merriweather:wght@700&display=swap" rel="stylesheet">
</head>
<div class="container">
    <section class="section contacts-section" id="contacts">
        <div class="contacts container">
            <div class="title-contacts">
                <h2 class="section-title-contacts" data-i18n="contact-me">Contact me</h2>
            </div>
            <div class="contacts-block">
                <form action="/contact" method="post">
                    <div class="mail">
                        <input class="mail" name="email" type="text" placeholder="E-mail" data-i18n="mail">
                    </div>
                    <div class="phone">
                        <input class="phone" name="number" type="text" placeholder="Phone" data-i18n="phone">
                    </div>
                    <div class="message">
                        <textarea placeholder="Message" name="message" data-i18n="message"></textarea>
                    </div>
                <button class="button-active-message" data-i18n="send-message">Send message</button></form>
            </div>
        </div>
    </section>
</div>