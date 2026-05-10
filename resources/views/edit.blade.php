<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #ccc;
        }

        h2 {
            text-align: center;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

        .message {
            text-align: center;
            color: green;
            margin-bottom: 15px;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Student Registration</h2>

   @if(session('success'))
       <script>
       alert("Student registered successfully!");
       </script>
   @endif

<form method="POST" action="{{ route('update', $userdata->id) }}"> 
        @csrf
        <label>Full Name</label>
        <input type="text" name="full_name" value="{{ $userdata->full_name }}" >
        @error('full_name') 
     <Span class="error">{{$message}}</Span>
    @enderror
    <br>

        <label>Phone</label>
        <input type="text" name="phone" value="{{ $userdata->phone }}"  >
        @error('phone')
     <Span class="error">{{$message}}</Span>
    @enderror
<br>
        <label>Email</label>
        <input type="email" name="email" value="{{ $userdata->email }}"  >
        @error('email')
     <Span class="error">{{$message}}</Span>
    @enderror
<br>

        <label>College</label>
        <input type="text" name="college" value="{{ $userdata->college}}" >
        @error('college')
     <Span class="error">{{$message}}</Span>
    @enderror
<br>

        <label>Course</label>
        @error('course')
     <Span class="error">{{$message}}</Span>
    @enderror
        <select name="course" >
            <option value="">Select Course</option>
            <option value="bca">BCA</option>
            <option>BSc CSIT</option>
            <option>BBS</option>
            <option>BIM</option>
            <option>BIT</option>
        </select>

        <label>Semester</label>
        @error('semester')
     <Span class="error">{{$message}}</Span>
    @enderror
        <select name="semester" >
            <option value="">Select Semester</option>
            <option value="1st">1st Semester</option>
            <option>2nd Semester</option>
            <option>3rd Semester</option>
            <option>4th Semester</option>
            <option>5th Semester</option>
            <option>6th Semester</option>
            <option>7th Semester</option>
            <option>8th Semester</option>
        </select>

        <button type="submit">Register</button>
    </form>
</div>

</body>
</html>