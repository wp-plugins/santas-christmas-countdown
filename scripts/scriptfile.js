function cw_axmascount() {today = new Date();
thismon = today.getMonth();
thisday = today.getDate();
thisyr = today.getFullYear();
if (thismon == 11 && thisday > 25)
	{
	thisyr = +thisyr;
	BigDay = new Date("December 25, "+thisyr);
	}
else
	{
	BigDay = new Date("December 25, "+thisyr);
	}

msPerDay = 24 * 60 * 60 * 1000;
timeLeft = (BigDay.getTime() - today.getTime() - 1);
e_daysLeft = timeLeft / msPerDay;
daysLeft = Math.ceil(e_daysLeft);
if (daysLeft <= 0 )
{ 
document.write("<br><br>Merry<br>Christmas!")
}
else 
{ 
document.write( ""+daysLeft+" days <BR> til Christmas!");}}