
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:xs="http://www.w3.org/2001/XMLSchema" version="2.0">
    <xsl:template match="/">
    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:epub="http://www.idpf.org/2007/ops" xml:lang="es-419" lang="es-419"> 
        
        <head>
            <title>_Title_</title>
            <meta charset="utf-8" />
            <link rel="stylesheet" type="text/css" href="../styles/stylesheet.css" />
            <style type="text/css" xml:space="preserve">
      .drm-short{
          color:grey;
          margin-top:-30px;
          margin-bottom:30px;
          text-align:center;
          font-family:"Helvetica", sans-serif;
          font-size:0.7em;
          text-indent:0;
      }</style>
        </head>
        <body>
            <section epub:type="index">
                <div class="page">
                    <span epub:type="pagebreak" id="page" title=""></span>
                    <h1 id="ch7" class="chaptitle"><span class="span3">_</span><span class="span4">INDEX</span></h1>
                    <!--A-->
                    <section epub:type="index-group">
                        <ul>
                            
            
                <xsl:for-each select="//entry">
                <li>
                    <span epub:type="index-term">
                     <xsl:value-of select="term"/>
                </span><xsl:for-each select="finders/group">
                    <xsl:choose>
                        <xsl:when test="end/page = 0">, 
                    <a epub:type="index-locator">
                        <xsl:attribute name="href">
                            <xsl:value-of select="start/paragraph"/>
                        </xsl:attribute>
                        <xsl:value-of select="start/page"/>
                    </a>
                    </xsl:when>
                        <xsl:otherwise>, <span epub:type="index-locator-range">
                            <a>
                                <xsl:attribute name="href">
                                    <xsl:value-of select="start/paragraph"/>
                                </xsl:attribute>
                                <xsl:value-of select="start/page"/>
                            </a>&#x2013;<a>
                                <xsl:attribute name="href">
                                <xsl:value-of select="end/paragraph"/>
                            </xsl:attribute>
                                <xsl:value-of select="end/page"/></a></span>                     
                    </xsl:otherwise>
                    </xsl:choose>
                     
                 
                    
                    
                </xsl:for-each></li>
                </xsl:for-each>
    
        </ul>
                    </section>
                </div>
                    </section>
    
</body>

    </html>
    </xsl:template>
</xsl:stylesheet>