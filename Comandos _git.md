
![](https://i.imgur.com/8kTC8ei.jpeg)

# comando para ver y poner en practica
## Comando comunes
### clonar repositorios
Este comando se utiliza para clonar repositorio a muestra local puede ser ya tenga uno permisos para colaborar o bien cualquiera pueda usarlos

```bash
git clone <nombre del repositorio>
```

### estado de cambios
Este comando es para ver el estado de la rama, ver que archivos fuero afectados y para ver que archivos se mandan al push 

```bash
git status
```

### crear rama
> **⚠️ Advertencia**: 
> Se debe de hacer siempre una rama nunca trabajar en TEST/MAIN u MASTER 

Este comando sirve para crear las ramas donde uno debe de trabajar o bien cambiar los cambios que uno le dicen

```bash
git checkout -b <nombre de la rama>
```

##### cambio de rama
Para cambiar la rama tanto locales como remotas se deben de colocar el siguiente comando

```bash
git checkout <nombre de la rama>
```

### ver ramas
Este comando nos servira a ver las ramas que tenemos en muestra local

```bash
git branch
```

##### ver ramas remotas
 Para ver las ramas remotas que tiene el proyecto se debe de colocar el siguiente comando
```bash
git branch -a
```

---

## Comandos para mandar
### Agregar
Este comando sirve para agregar los archivos para pedir la solicitar extración

```bash
git add .
```

##### agregar archivo selectos
Se puede agregar archivos seleccionados para pedir la solicitud

```bash
git add <nombre de los archivos>
```

### comentar
Este comando es para comentar lo que se ha echo se recomienda que sea breve y especifico lo que se ha echo en la tarea o la asignación de la tal

```bash
git commit -m "entre comillas la descripción"
```

> **Nota**: 
> enlaces para colocar emojis al commit 

[emoji git](https://gist.github.com/rxaviers/7360908)

[gitmoji](https://gitmoji.dev/)

##### emoji en el git 
se puede colocar emoji al commit y que sea mas coloridos los comentario, así asignarle una señal al probrema o bien corección echa.

```bash 
git commit -m ":two_women_holding_hands: se debe de colocar :: para que se vea el el emoji"
```

### Empujar
Este comando sirve para mandar los cambios a github ya que esta conectado remotamente el repositorio

```bash
git push origin <nombre de la rama>
```

## Atraer cambios
Después que se haya echo mandado los cambios se debe de regresar a la rama test/main u master para atraer los cambios de los demás colaboradores 

### ver la rama
```bash
git branch

* tasklogo
* $tasknavbar
* taskcliente
* master
```
### pasarse a la rama master
```bash
git checkout master

git banch
* tasklogo
* tasknavbar
* taskcliente
* $master
```

### Jalar los cambios
Este comando sirve para atraer o jalar los cambios que se encuentra en la rama

```bash
git pull
```
