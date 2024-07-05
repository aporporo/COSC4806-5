<?php
if (!isset($_SESSION['auth'])) {
    header('Location: /login');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="icon" href="/favicon.png">
        <title>COSC 4806</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
      <style>
        .navbar {
            background: transparent !important;
        }
        .navbar-nav .nav-link {
            color: white !important;
        }
      </style>
    </head>
    <body style="background-color: #edf5fb">
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAXVBMVEVHcEzi7vzk7/vt8/n39vZniNK11v/H4//Z6vzv8/f29vWy1f+axf+Vwf+Luf6Kufx6rPtOjfZKivVhmvh6rPpQjvVEhvSNvP5DhO88eeotZd0rZNEnYdspX9EnXNGKIiMYAAAAH3RSTlMALnSgsBmj//////////+e/////3Gu/66d/v80/5OvsiUU+QAAASxJREFUeAGVjtGSgyAMALEWbSVQiT2uqvT/P/MScqBWX7p5YWZ3QtRXVJf6eq0v1bnVTZu43buu1kdftzeyknSUfC5vDQAY0wp3SqqdNxYIa8GcFhUU7H/R7YpV85K1yL6BXWE+L9UknHPZSyFnaMU8oPeI6PuSlENlBQzoGfRk5YxSsK968gK69ROhouDpV1C8dTm48Akbjx6sNK3QUPDjN+AAVjDHAJnQ5wJMa+CXgpf3YRzHlNAEm3E0j3TkODHBY8LbDU8KZpwSy0nhZkXIAiKwDjQO5APrFROnDKI0YeAEnH8pRk8FtgIOAz21SsR9IREjC4hphU4ojCqjF3ZLmhGL16owi6RZKAnIeprVBp3twvC6Ras9UWwmqgM6brRWp8wxvt8xzuob/gCnVSzVcGJ2AwAAAABJRU5ErkJggg==" alt="" width="30" height="30">
      COSC4806
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <?php if (isset($_SESSION['permission']) && $_SESSION['permission'] == 2): ?>
          <li class="nav-item">
            <a class="nav-link" href="/reports">Reports</a
          </li>
  
        <?php endif; ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/reminders">Reminders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/logout">Logout</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>