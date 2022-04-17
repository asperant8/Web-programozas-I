<div class="row justify-content-center cardbox" style="margin: auto;margin-top:1em;">
    <div class="w-50 text-center">
        <form action="?page=message" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="firstName">First name</label>
                        <input onchange="checkFirstName()" type="text" name="firstName" class="form-control bg-dark" id="firstName" placeholder="John">
                        <span id="firstnamespan"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lastName">Last name</label>
                        <input onchange="checkLastName()" type="text" name="lastName" class="form-control bg-dark" id="lastName" placeholder="Doe">
                         <span id="lastnamespan"></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="text">Email address</label>
                <input onchange="checkEmail()" type="text" name="email" class="form-control bg-dark" id="email" placeholder="name@example.com">
                <span id="emailspan"></span>
            </div>
            <div class="form-group">
                <label for="text">Phone number</label>
                <input onchange="checkPhone()" type="text" name="phone" class="form-control bg-dark" id="phone" placeholder="+21312513">
                <span id="phonespan"></span>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" class="form-control bg-dark" id="subject" placeholder="Cat adoptation">
                <span id="subjectspan"></span>
            </div>
            <div class="form-group">
                <label for="text">Message</label>
                <textarea onchange="checkMessage()" class="form-control bg-dark" name="message" id="message" rows="3"></textarea>
                <span id="messagespan"></span>
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