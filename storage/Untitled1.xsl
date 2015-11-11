<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:xs="http://www.w3.org/2001/XMLSchema"
    exclude-result-prefixes="xs"
    version="2.0">
    <html>
        <head></head>
        <body>
    
            <section epub:type="index">
                <div class="page">
                    <span epub:type="pagebreak" id="page47" title="47"></span>
                    <h1 id="ch7" class="chaptitle"><span class="span3">7</span><span class="span4">ÍNDICE</span></h1>
                    <section epub:type="index-group">
                        <ul>
                            
            <xsl:template match="/">
                <xsl:for-each select="entry">
                <li><span epub:type="index-term">
                    <xsl:value-of select="term"/>
                </span>
                </li>
                </xsl:for-each>
    </xsl:template>
        </ul>
    </section>
    
</xsl:stylesheet>
</body>
</html>