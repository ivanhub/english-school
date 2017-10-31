<SCRIPT>
var TimeOver = true
function getJam(Tanggal)
{
   Jam =  (Tanggal.getHours() < 10) ? "0"  + Tanggal.getHours()  + ":" : Tanggal.getHours() + ":"
   Jam += (Tanggal.getMinutes() < 10) ? "0" + Tanggal.getMinutes() + ":" : Tanggal.getMinutes() + ":"
   Jam += (Tanggal.getSeconds() < 10) ? "0" + Tanggal.getSeconds() : Tanggal.getSeconds()
   return Jam
}

function dispJam()
{
   TglCur = new Date()
   document.User.Watch.value = getJam(TglCur)
   document.User.TimeTaken.value = getWaktu(TglCur,TglStart)
   if ((Tgl.getTime() - TglCur.getTime()) <= 0)
   {
      if(TimeOver) TimeOverWarn()
      document.User.TimeLeft.value = "Habis"
   }
   else
      document.User.TimeLeft.value = getWaktu(Tgl,TglCur)
   setTimeout("dispJam()",1000)
}

function getWaktu(Tgl,TglCur)
{
   TmLf = Tgl.getTime() - TglCur.getTime()
   TmLfHours = Math.floor(TmLf/3600000) 
   TmLfMinutes = Math.floor((TmLf%3600000)/60000)
   TmLfSeconds = Math.round((TmLf%60000)/1000)
   TmLfStr = (TmLfHours < 10) ? "0" + TmLfHours + ":" : TmLfHours + ":"
   TmLfStr += (TmLfMinutes < 10) ? "0" + TmLfMinutes + ":" : TmLfMinutes + ":"
   TmLfStr += (TmLfSeconds < 10) ? "0" + TmLfSeconds : TmLfSeconds
   return TmLfStr
}

function TimeOverWarn()
{
   window.confirm("\nWaktu Anda Habis\nSilahkan klik Selesai")
   InputHidden()
   TimeOver = true
   window.open("tes2.php")
   return true
}
<SCRIPT>