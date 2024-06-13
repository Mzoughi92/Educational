<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
   <style>body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 400px;
}

form {
    display: flex;
    flex-direction: column;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"],
select {
    padding: 8px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 10px;
}

button:hover {
    background-color: #45a049;
}
</style>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Add any additional CSS or JavaScript includes here -->
</head>
<body>
    <div class="container">
        <h2>User Registration</h2>
        <form method="POST" action="{{('/register')}}">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert" style="color: red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert" style="color: red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert" style="color: red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="form-group">
                <label for="educational_qualification">Educational Qualification:</label>
                <select id="educational_qualification" class="form-control @error('educational_qualification') is-invalid @enderror" name="educational_qualification" required>
                    <option value="">Select</option>
                    <option value="Abitur" {{ old('educational_qualification') == 'Abitur' ? 'selected' : '' }}>Abitur</option>
                    <option value="Fachabitur" {{ old('educational_qualification') == 'Fachabitur' ? 'selected' : '' }}>Fachabitur</option>
                    <option value="Realschule" {{ old('educational_qualification') == 'Realschule' ? 'selected' : '' }}>Realschule</option>
                    <option value="Hauptschule" {{ old('educational_qualification') == 'Hauptschule' ? 'selected' : '' }}>Hauptschule</option>
                </select>
                @error('educational_qualification')
                    <span class="invalid-feedback" role="alert" style="color: red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="industry">Industry:</label>
                <select id="industry" class="form-control @error('industry') is-invalid @enderror" name="industry" required>
                    <option value="">Select</option>
                    <option value="Handel" {{ old('industry') == 'Handel' ? 'selected' : '' }}>Handel</option>
                    <option value="Industrie" {{ old('industry') == 'Industrie' ? 'selected' : '' }}>Industrie</option>
                    <option value="Elektro/Elektronik" {{ old('industry') == 'Elektro/Elektronik' ? 'selected' : '' }}>Elektro/Elektronik</option>
                    <option value="Handwerk" {{ old('industry') == 'Handwerk' ? 'selected' : '' }}>Handwerk</option>
                    <option value="Kaufmännisches & Verwaltung" {{ old('industry') == 'Kaufmännisches & Verwaltung' ? 'selected' : '' }}>Kaufmännisches & Verwaltung</option>
                    <option value="Bauwesen & Immobilien" {{ old('industry') == 'Bauwesen & Immobilien' ? 'selected' : '' }}>Bauwesen & Immobilien</option>
                    <option value="Medizin & Pflege" {{ old('industry') == 'Medizin & Pflege' ? 'selected' : '' }}>Medizin & Pflege</option>
                    <option value="Finanzen & Versicherungen" {{ old('industry') == 'Finanzen & Versicherungen' ? 'selected' : '' }}>Finanzen & Versicherungen</option>
                    <option value="IT & EDV" {{ old('industry') == 'IT & EDV' ? 'selected' : '' }}>IT & EDV</option>
                    <option value="Automobil" {{ old('industry') == 'Automobil' ? 'selected' : '' }}>Automobil</option>
                </select>
                @error('industry')
                <span class="invalid-feedback" role="alert" style="color: red">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    <script>
        function validateForm(event) {
    event.preventDefault();
    
    
    const emailInput = document.getElementById('email');
    const email = emailInput.value.trim();
    if (!isValidEmail(email)) {
        alert('Please enter a valid email address.');
        emailInput.focus();
        return false;
    }

    
    const passwordInput = document.getElementById('password');
    const password = passwordInput.value.trim();
    if (password.length < 8) {
        alert('Password must be at least 8 characters long.');
        passwordInput.focus();
        return false;
    }

 
    alert('Registration successful!'); 
    document.getElementById('registrationForm').reset(); 
}

function isValidEmail(email) {
 
    const re = /\S+@\S+\.\S+/;
    return re.test(email);
}

    </script>
</body>
</html>
