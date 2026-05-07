
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .contact-form {
      background: #fff;
      padding: 25px;
      border-radius: 10px;
      width: 350px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .contact-form h2 {
      margin-bottom: 15px;
      text-align: center;
    }
    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .contact-form button {
      width: 100%;
      padding: 10px;
      background: #021d3a;
      border: none;
      color: #fff;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }
    .contact-form button:hover {
      background: #245c97;
    }
    .error{
      color: red;
      
  
    }
  </style>

   <form class="contact-form" method="post" action="/submit">
    @csrf

    <h2>Contact Us</h2>
    
    <input type="text" name="name" placeholder="Your Name">
    @error('name')
     <Span class="error">{{$message}}</Span>
    @enderror
   
    
    <input type="email" name="email" placeholder="Your Email" >
    @error('email')
     <Span class="error">{{$message}}</Span>
    @enderror

    <input type="text" name="subject" placeholder="Subject">
    @error('subject')
     <Span class="error">{{$message}}</Span>
    @enderror

    <textarea name="message" rows="5" placeholder="Your Message" ></textarea>
    @error('message')
     <Span class="error">{{$message}}</Span>
    @enderror

    <button type="submit">Send Message</button>

   </form>
