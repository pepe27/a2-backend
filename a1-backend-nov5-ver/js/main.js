//main.js
console.log("connected main.js");

//readingAssistance
document.addEventListener('keydown', function(event) {
    if (event.code == 'KeyA' && (event.ctrlKey || event.metaKey)) {
      alert('readingAssistance')
    }
  });