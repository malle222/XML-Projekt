<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="/">
        <html>
            <head>
                <title>Nachricht</title>
            </head>
            <body>
                <h1>Nachricht</h1>
                <p><strong>Text:</strong> <xsl:value-of select="Message/Text"/></p>
                <h2>Metadaten</h2>
                <ul>
                    <li><strong>Sender:</strong> <xsl:value-of select="Message/Metadata/Sender"/></li>
                    <li><strong>Datum:</strong> <xsl:value-of select="Message/Metadata/Date"/></li>
                    <li><strong>Tags:</strong> <xsl:value-of select="Message/Metadata/Tags"/></li>
                    <li><strong>Antwort auf:</strong> <xsl:value-of select="Message/Metadata/ReplyTo"/></li>
                </ul>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
