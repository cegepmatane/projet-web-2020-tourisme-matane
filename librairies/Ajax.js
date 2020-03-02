/** XHConn - Simple XML-HTTP Interface - bfults@gmail.com - 2005-04-08        **
 ** Code licensed under Creative Commons Attribution-ShareAlike License      **
 ** http://creativecommons.org/licenses/by-sa/2.0/                           **/
function Ajax()
{
  var connection, completion = false;
  try { connection = new ActiveXObject("Msxml2.XMLHTTP"); }
  catch (e) { try { connection = new ActiveXObject("Microsoft.XMLHTTP"); }
  catch (e) { try { connection = new XMLHttpRequest(); }
  catch (e) { connection = false; }}}
  if (!connection) return null;
  this.executer = function(protocole, url, parametres, fonction)
  {
    if (!connection) return false;
    completion = false;
    protocole = protocole.toUpperCase();

    try {
      if (protocole == "GET")
      {
        connection.open(protocole, url+"?"+parametres, true);
        parametres = "";
      }
      else
      {
        connection.open(protocole, url, true);
        connection.setRequestHeader("Method", "POST "+url+" HTTP/1.1");
        connection.setRequestHeader("Content-Type",
          "application/x-www-form-urlencoded");
      }
      connection.onreadystatechange = function(){
        if (connection.readyState == 4 && !completion)
        {
          completion = true;
          fonction(connection);
        }};
      connection.send(parametres);
    }
    catch(z) { return false; }
    return true;
  };
  return this;
}
