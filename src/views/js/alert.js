$("*").click(function(){
  var date = new Date();
  date.setTime(date.getTime() + (20 * 60 * 1000));
  Cookies.set('alert','accepted', { expires: date });
    });
