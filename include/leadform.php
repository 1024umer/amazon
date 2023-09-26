<form action="sendmail.php" method="POST">
    <div class="fld-inp">
        <div class="contact-icon-box">
            <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        <input onkeypress="return /[a-z]/i.test(event.key)" type="text" name="name" required="" placeholder="Full Name *">
    </div>
    <div class="fld-inp">
        <div class="contact-icon-box">
            <i class="fa fa-phone" aria-hidden="true"></i>
        </div>
        <input type="number" name="phone" required="" placeholder="Phone Number *">
    </div>
    <div class="fld-inp">
        <div class="contact-icon-box">
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </div>
        <input type="email" name="email" required="" placeholder="Email Address *">
    </div>
    <div class="fld-inp fld-txt">
        <i class="fa fa-pencil" aria-hidden="true"></i>
        <textarea name="message" placeholder="Enter Message" required=""></textarea>
    </div>
    <button type="submit">
        Submit!
    </button>
    <input type="hidden" id="" name="url" value="<?= $url ?>">
</form>