<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Contact Form</title>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>

    <div class="container">
        <div class="row pt-5" x-data="{
            email : '',
            message : '',
            contactNumbers : [
                '+91-1234567890',
                '+91-1234567891',
                '+91-1234567892'
            ]
        }">
            <h1>Contact Us</h1>
            <div class="col-md-6 p-3">
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">
                            Email address
                        </label>
                        <input type="email" x-model="email" class="form-control" id="email"
                            name="email"
                            placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" x-model="message" name="message" id="message" rows="3"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Send</button>
                </form>
            </div>
            <div class="col-md-6 p-3">
                <h4>Your Contact Request</h4>
                <ul>
                    <li>
                        <strong>Email:</strong> <span x-text="email"></span>
                    </li>
                    <li>
                        <strong>Message:</strong>
                        <p x-text="message"></p>
                    </li>
                </ul>

                <ul>
                    <template x-for="contactNumber in contactNumbers">
                        <li x-text="contactNumber"></li>
                    </template>
                </ul>

                <button type="button" class="btn btn-primary" x-on:click="contactNumbers.push('hello')">Add Contact</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
