<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jarvis - 1 | Form</title>
</head>
<body>
  <h1>Buat Account Baru!</h1>
  <h2>Sign Up Form</h2>
  <form action="{{ 'welcome' }}" method="GET">
    <div>
      <label for="first-name">First Name :</label>
      <br><br>
      <input 
        id="first-name" 
        name="first-name"
        type="text"
      />
    </div>
  
    <br>
  
    <div>
      <label for="last-name">Last Name :</label>
      <br><br>
      <input 
        id="last-name"
        name="last-name" 
        type="text"
      />
    </div>
  
    <br>
  
    <div>
      <label for="gender">Gender: </label>
      <br><br>
      <div>
        <input type="radio" name="male" id="gender-male" value="male">
        <label for="gender-male">Male</label>
        <br>
      </div>
      <div>
        <input type="radio" name="female" id="gender-female" value="female">
        <label for="gender-female">Female</label>
        <br>
      </div>
      <div>
        <input type="radio" name="other" id="gender-other" value="other">
        <label for="gender-other">Other</label>
        <br>
      </div>
    </div>
  
    <br>
  
    <div>
      <label for="nationality">Nationality:</label>
      <br><br>
      <select name="nationality" id="nationality">
        <option value="indonesia">Indonesia</option>
        <option value="inggris">Inggris</option>
        <option value="amerika">Amerika</option>
      </select>
    </div>
  
    <br>
  
    <div>
      <label for="language-spoken">Language Spoken</label>
      <br><br>
      <div>
        <input type="checkbox" name="bike" id="bike">
        <label for="bike">I have a bike</label>
      </div>
      <div>
        <input type="checkbox" name="car" id="car">
        <label for="car">I have a car</label>
      </div>
      <div>
        <input type="checkbox" name="boat" id="boat">
        <label for="boat">I have a boat</label>
      </div>
    </div>
  
    <br>
  
    <div>
      <label for="bio">Bio:</label>
      <br><br>
      <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
    </div>
    
    <br>
    
    <input type="submit" value="Sign Up">
  </form>
  
</body>
</html>