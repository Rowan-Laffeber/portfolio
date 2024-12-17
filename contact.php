<?php include("partials/top.php"); ?>
        <h1>Contact</h1>
        <h2>Neem contact met mij op via onderstaand formulier of the socials in the footer.</h2>
        <form action="submitted.php" method="post">
            <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="First name" required>
            <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Last name" required>
            <label for="email">Email</label>
                <input type="email" name="Email" id="email" placeholder="Email" required >
            <label for="Phonenumber">Phone number</label>
                <input type="tel" name="telefoon" id="Phonenumber" placeholder="Phone number" required minlength="11" maxlength="14">
            <label for="Subject">Subject</label>
                <input type="text" name="Subject" id="Subject" placeholder="Subject">
            <label for="Message">Message</label>
                <textarea id="Message" name="Message" placeholder="Message" required spellcheck="true"></textarea>
            <input type="submit" name="submit" id="submit">
        </form>
<?php include("partials/bottom.php"); ?>
