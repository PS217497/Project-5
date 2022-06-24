import * as React from 'react';
import {View, Text} from 'react-native';

export default function oefeningen({navigation}) {
    return(
        <View style={{flex: 1, alignItems: 'center', justifyContent: 'center'}}>
            <Text
                onPress={() => navigation.navigate('Dit is de "Oefeningen" scherm.')}
                style={{fontSize: 26, fontWeight: 'bold'}}>Oefeningen Scherm</Text>
        </View>
    );
}