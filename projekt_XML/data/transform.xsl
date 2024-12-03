<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:template match="/">
        <html>
            <head>
                <title>CSV als XML</title>
            </head>
            <body>
                <h1>Daten aus der CSV-Datei</h1>
                <table border="1">
                    <tr>
                        <xsl:for-each select="root/item[1]/*">
                            <th>
                                <xsl:value-of select="name()"/>
                            </th>
                        </xsl:for-each>
                    </tr>
                    <xsl:for-each select="root/item">
                        <tr>
                            <xsl:for-each select="*">
                                <td>
                                    <xsl:value-of select="."/>
                                </td>
                            </xsl:for-each>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
