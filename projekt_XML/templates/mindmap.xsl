<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="/">
        <html>
            <head>
                <title>Mindmap</title>
            </head>
            <body>
                <h1>Mindmap</h1>
                
                <!-- Knoten anzeigen -->
                <h2>Knoten</h2>
                <ul>
                    <xsl:for-each select="Mindmap/Nodes/Node">
                        <li>
                            <xsl:value-of select="." /> 
                            (Form: <xsl:value-of select="@shape" />,
                            Farbe: <xsl:value-of select="@color" />)
                        </li>
                    </xsl:for-each>
                </ul>
                
                <!-- Verbindungen anzeigen -->
                <h2>Verbindungen</h2>
                <ul>
                    <xsl:for-each select="Mindmap/Connections/Connection">
                        <li>
                            Verbindung von Knoten <xsl:value-of select="@from" />
                            zu Knoten <xsl:value-of select="@to" />
                        </li>
                    </xsl:for-each>
                </ul>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
