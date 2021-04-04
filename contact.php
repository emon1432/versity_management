<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact_style.css">
    <link rel="icon" href="img/IST_logo.png" >
    <title>Contact Us</title>
</head>

<body>
    <?php
    include "header.php"
    ?>
    <main>
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2>
            </div>
            <div class="containers">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa icons fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>House # 54, Road # 15A (New), 26 (Old)</br>
                                Dhanmondi R/A, Dhaka 1209.</br>
                                [East of Shankar Bus Stand]</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa icons fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>Phone: +88 02-55029352, +88 02-55029353</br>
                                Mobile: +8801726937910</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa icons fa-envelope-o" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>info@ist.edu.bd</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form method="POST" autocomplete="off" name="google-sheet">
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="name" required="required">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="email" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea name="message" required="required"></textarea>
                            <span>Type your message...</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <div class="ist-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.862194689175!2d90.36843681553671!3d23.75229308458847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf52189ebcf5%3A0x10081ab90b263871!2sInstitute%20of%20Science%20%26%20Technology!5e0!3m2!1sen!2sbd!4v1617481141453!5m2!1sen!2sbd" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </main>

    <!-- <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbwupFJ-Lt4n6gnopUkuXxYdM289Fe77lUA-V94ZPw7yO5mx6H3X4lk0NSoXTGGO2h6I/exec'
        const form = document.forms['google-sheet']
        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, {
                method: 'POST',
                body: new FormData(form)
            }).then(response => alert("Thanks for Contacting me..! I Will Contact You Soon...")).catch(error => console.error('Error!', error.message))
        })
    </script> -->

</body>

</html>