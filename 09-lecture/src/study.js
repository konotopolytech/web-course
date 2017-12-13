function hello(index) {  
  if (index === undefined) {
    alert('undefined');
  } else { 
    for (var i = 1; i <= index; i++) {
      alert(i + "Hello World!");  
    }
  }
}