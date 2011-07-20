<?xml version="1.0" encoding="iso-8859-1"?>

<xsl:stylesheet
 version="1.0"
 xmlns:exsl="http://exslt.org/common"
 xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
 xmlns:func="http://exslt.org/functions"
 extension-element-prefixes="func"
>

  <xsl:template match="/">
    <h1><xsl:value-of select="/formresult/node"/></h1>
  </xsl:template>

</xsl:stylesheet>
