----TORNEO de TENIS----

1 - Clase Tournament se construye con un array de judadore (Player), el tipo de torneo (Masculino o Femenino)

2 - El tipo de Torneo Masculino MaleTournament aporta parametros masculinos que se evaluaran en el Challenge

3 - El tipo de Torneo Femenino FemaleTournament aporta parametros masculinos que se evaluaran en el Challenge

4 - Ambos tipos de torneo FemaleTournament, MaleTournament implementan la interzas ItypeTournament que determina el tipo de torneo

5 - La clase Tournament implementa la interfaz Itournament

6 - La clase Tournament tiene un array challenges con los desafios por ronda. El ejemplo. Son 8 jugadores y 3 rondas. 

7 - Un Challenge esta compuesto por dos Player.

8 - Cada Player esta compuesto por atributos. 

9 - El Challengue conoce el tipo de torneo (Masculino o Femenino). En el caso del Masculino el metodo getWinner se determinara por los atributos de experience, strengh y speed. En el caso de tipo de torneo Femenino el metodo getWinner se determinara por los atributos de experience y tiempo de reaccion. 
Tener en cuenta que la logica del método getWinner

10 - Para la ejecución del script, dentro de la carpeta ejecutar: php example.php