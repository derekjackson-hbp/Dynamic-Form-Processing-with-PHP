
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:xs="http://www.w3.org/2001/XMLSchema" version="2.0">
    <xsl:template match="/">
    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:epub="http://www.idpf.org/2007/ops" xml:lang="es-419" lang="es-419"> 
        
        <head></head>
        <body>
            <section epub:type="index">
                <div class="page">
                    <span epub:type="pagebreak" id="page47" title="47"></span>
                    <h1 id="ch7" class="chaptitle"><span class="span3">7</span><span class="span4"
                        >ÍNDICE</span></h1>
                    <!--A-->
                    <section epub:type="index-group">
                        <ul>
                            
            
                <xsl:for-each select="//entry">
                <li>
                    <span epub:type="index-term">
                     <xsl:value-of select="term"/>
                </span>
                    <xsl:for-each select="//entry">
                    <a href="ch02.xhtml#p2_34" epub:type="index-locator">13</a>
                    </xsl:for-each>
                    
                </li>
                </xsl:for-each>
    
        </ul>
                    </section>
                </div>
                    </section>
    
</body>

    </html>
    </xsl:template>
</xsl:stylesheet>