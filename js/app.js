//Kreativny bod
window.onload = function() {
    if (!localStorage.getItem('cookieSeen')) {
        document.getElementById('cookieConsent').style.display = 'block';
    }
  }
  
  function acceptCookies() {
    localStorage.setItem('cookieSeen', 'true');
    document.getElementById('cookieConsent').style.display = 'none';

  }

  