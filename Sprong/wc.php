<?xml version="1.0" encoding="utf-8" ?>
<configuration>
    <system.webServer>
        <rewrite>
            <rules>
                <rule name="allToIndex">
                    <match url="^((?!css).)*$"/>
                    <action type="Rewrite" url="index.php" appendQueryString="true"/>
                </rule>
            </rules>
        </rewrite>
    </system.webServer>
</configuration>