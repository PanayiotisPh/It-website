const date = new Date();

const renderCalendar = () => {
  date.setDate(1);

  const monthDays = document.querySelector(".days");

  const lastDay = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDate();

  const prevLastDay = new Date(
    date.getFullYear(),
    date.getMonth(),
    0
  ).getDate();

  const firstDayIndex = date.getDay();

  const lastDayIndex = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDay();

  const nextDays = 7 - lastDayIndex - 1;

  const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];

  document.querySelector(".date h1").innerHTML = months[date.getMonth()];

  document.querySelector(".date p").innerHTML = new Date().toDateString();

  let days = "";
  
  for (let x = firstDayIndex; x > 0; x--) {
    var ymd = date.getFullYear() +  '/'+  monthToNumber( months[date.getMonth()-1]) + '/'+ x ;
    days += `<div class="prev-date"><a href="bookaservice.html?date=${ymd}">${
      prevLastDay - x + 1
    
    }  </div>`;
  }
  
  for (let i = 1; i <= lastDay; i++) {
     var ymd = date.getFullYear() +  '/'+ monthToNumber( months[date.getMonth()]) + '/'+i ;
    if (
      i === new Date().getDate() &&
      date.getMonth() === new Date().getMonth()
    ) {
      days += `<div class="today"><a href="bookaservice.html?date=${ymd}" >${i} </div>`;
    } else {
      days += `<div><a href="bookaservice.html?date=${ymd}">${i} </div>`;
      }
  }
  // changed 
 if(months[date.getMonth()] === "December"){
    monthDays.innerHTML = days;
 }


  for (let j = 1; j <= nextDays; j++) {
    var ymd = date.getFullYear() +  '/'+ monthToNumber( months[date.getMonth()+1]) + '/'+j ;
    days += `<div class="next-date"><a href="bookaservice.html?date=${ymd}">${j}  </div>`;
    monthDays.innerHTML = days;
  }
};

document.querySelector(".prev").addEventListener("click", () => {
  date.setMonth(date.getMonth() - 1);
  renderCalendar();
});

document.querySelector(".next").addEventListener("click", () => {
  date.setMonth(date.getMonth() + 1);
  renderCalendar();
});

renderCalendar();

function monthToNumber(s){
  switch(s){
    case "January":
    s = 01;
    break;
    case "February":
    s = 02;
    break;
    case "March":
    s = 03;
    break;
    case "April":
    s = 04;
    break;
    case "May":
    s = 05;
    break;
    case "June":
    s = 06;
    break;
    case "July":
    s = 07;
    break;
    case "August":
    s = 08;
    break;
    case "September":
    s = 09;
    break;
    case "October":
    s = 10;
    break;
    case "November":
    s = 11;
    break;
    case "December":
    s = 12;
    break;

  }
  return s;
}
