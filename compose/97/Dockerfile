
FROM mcr.microsoft.com/windows/servercore:1909

RUN powershell -Command \
	$ErrorActionPreference = 'Stop'; \
	Invoke-WebRequest -Method Get -Uri http://nginx.org/download/nginx-1.9.13.zip -OutFile c:\nginx-1.9.13.zip ; \
	Expand-Archive -Path c:\nginx-1.9.13.zip -DestinationPath c:\ ; \
	Remove-Item c:\nginx-1.9.13.zip -Force

WORKDIR /nginx-1.9.13

CMD ["/nginx-1.9.13/nginx.exe"]