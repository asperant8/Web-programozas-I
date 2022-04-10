<div class="row justify-content-center cardbox" style="margin: auto;margin-top:1em;">
    <div class="w-50 text-center">
        <form action="?page=message" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="firstName">First name</label>
                        <input onchange="checkFirstName()" type="text" name="firstName" class="form-control bg-dark" id="firstName" placeholder="John">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lastName">Last name</label>
                        <input onchange="checkLastName()" type="text" name="lastName" class="form-control bg-dark" id="lastName" placeholder="Doe">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input onchange="checkEmail()" type="email" name="email" class="form-control bg-dark" id="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="phoneNumber">Phone number</label>
                <input onchange="checkPhone()" type="tel" name="phone" class="form-control bg-dark" id="phone" placeholder="+21312513">
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" class="form-control bg-dark" id="subject" placeholder="Cat adoptation">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea onchange="checkMessage()" class="form-control bg-dark" name="message" id="message" rows="3"></textarea>
            </div>
            <div style="margin:1em;">
                <button type="submit" name="submit" id="submit" class="formButton">Send</button>
            </div>
        </form>
    </div>
</div>

<style>
    input {
        border: 3px solid rgb(0, 36, 84) !important;
        color: white !important;
    }


    textarea {
        border: 3px solid rgb(0, 36, 84) !important;
        color: white !important;
    }
</style>