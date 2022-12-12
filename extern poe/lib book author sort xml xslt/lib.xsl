<?xml version = "1.0" encoding = "UTF-8"?>  
<xsl:stylesheet version = "1.0"   
xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">     
   <xsl:template match = "/">   
      <html>    
         <body>   
            <h2>Library</h2>   
            <table border = "1">   
               <tr bgcolor = "pink">   
                  <th>ID</th>   
                  <th>Name</th>   
                  <th>Author</th>   
                  <th>Price</th> 
                  <th>Publication_yr</th>  
               </tr>   
               <xsl:for-each select = "class/student">   
               <xsl:sort select = "author"/> 
               <xsl:if test="author">
            
                     <tr>   
                     <td><xsl:value-of select = "@id"/></td>   
                     <td><xsl:value-of select = "name"/></td>   
                     <td><xsl:value-of select = "author"/></td>     
                     <td><xsl:value-of select = "price"/></td> 
                     <td><xsl:value-of select = "publication_yr"/></td>     
                  </tr>   
               </xsl:if>
               </xsl:for-each>   
            </table>   
         </body>   
      </html>  
  </xsl:template>    
</xsl:stylesheet>  
