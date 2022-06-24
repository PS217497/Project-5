import * as React from 'react';
import {View, Text} from 'react-native';

export default function about({navigation}) {
    return(
        <View style={{flex: 1, alignItems: 'center', justifyContent: 'center'}}>
            <Text
                onPress={() => navigation.navigate('About')}
                style={{fontSize: 26, fontWeight: 'bold'}}>About Scherm</Text>
        </View>
    );
}