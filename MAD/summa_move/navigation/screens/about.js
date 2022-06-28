import * as React from 'react';
import {View, Text} from 'react-native';

export default function about({navigation}) {
    return(
        <View style={{flex: 1, alignItems: 'center', justifyContent: 'center'}}>
            <Text
                onPress={() => navigation.navigate('About')}
                style={{fontSize: 26, fontWeight: 'bold'}}>Welkom bij Summa Move!
            </Text>
            <Text
                style={{fontSize: 20, margin: 10 }}>Deze app is gemaakt voor de studenten van de
                 summa college. Summa Move wilt ervoor zorgen dat de studenten van de Summa
                 College meer gaan bewegen. Op onze app kun je bij de oefeningen scherm
                 bekijken wat voor verschillende oefeningen er zijn. Als je op een
                 bepaald oefening dan krijg je extra informatie over de bepaalde
                 oefening. Bijvoorbeeld waarvoor de oefening dient, foto's en 
                 hoevaak je de oefening moet gaan herhalen. Succes!
            </Text>

            <Text></Text>

            <Text style={{fontSize: 24, fontWeight: 'bold'}}> Help </Text>

            <Text
                style={{fontSize: 20, margin: 10}}>
                    Hieronder vind je een paar verwijzingen voor hulp als er een
                    probleem is met de app, of andere fouten.
            </Text>

            <Text
                style={{fontSize: 20, margin: 10}}>
                    1: Als de app problemen heeft met inloggen probeer de app af te sluiten.
                    Vervolgens open de app en probeer opnieuw in te loggen.
            </Text>

            <Text
                style={{fontSize: 20, margin: 10}}>
                    2: Als de oefeningen op de app niet laden, kijk eens of je bent verbonden
                    met de internet connectie. Als dit niet het geval is, verwijder de app 
                    en download het opnieuw.
            </Text>

            <Text
                style={{fontSize: 20, margin: 10}}>
                    3: Als je persoonlijke progress van de oefeningen niet laat zien, kijk
                    eens of je bent ingelogd. Als dit niet het geval is dan wordt er geraadpleegd
                    voor hulp van de beheerders.
            </Text>

        </View>
    );
}