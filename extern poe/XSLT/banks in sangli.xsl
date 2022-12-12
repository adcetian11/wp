<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" 
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
 <html>
 <body>
  <h1 align="center">Banks in Sangli</h1>
   <table border="3" align="center" >
   <tr>
    <th>sr</th>
    <th>name</th>
    <th>address</th>
    <th>Total_Turnaround</th>
    <th>Distence_from_center</th>
   </tr>
    <xsl:for-each select="bank/s">
   <tr>
    <td><xsl:value-of select="sr"/></td>
    <td><xsl:value-of select="name"/></td>
    <td><xsl:value-of select="address"/></td>
    <td><xsl:value-of select="Total_Turnaround"/></td>
    <td><xsl:value-of select="Distence_from_center"/></td>
   </tr>
    </xsl:for-each>
    </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>
