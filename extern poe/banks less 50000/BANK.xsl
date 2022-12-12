<?xml version = "1.0" encoding = "UTF-8"?>
<xsl:stylesheet version = "1.0"

xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">
   <xsl:template match = "/">
      <html>
         <body>
            <h2>bank</h2>
            <table border = "1">
               <tr bgcolor = "pink">
                  <th>ID</th>
                  <th>name_of_bank</th>
                  <th>address</th>
                  <th>Total_turnaround</th>
                  <th>Distance_From_Center</th>
               </tr>
               <xsl:for-each select = "class/bank">
               <xsl:sort select = "id" />
                     <tr>
                     <td><xsl:value-of select = "@id"/></td>
                     <td><b><xsl:value-of select = "name_of_bank"/></b></td>
                     <td><xsl:value-of select = "address"/></td>
                     <td><b><xsl:value-of select = "Total_turnaround"/></b></td>
                     <td><xsl:value-of select = "Distance_From_Center"/></td>
                  </tr>
               </xsl:for-each>
            </table>
         </body>
      </html>
  </xsl:template>
</xsl:stylesheet>
