import { StyleSheet, Text, View } from 'react-native';
import { MAIN_COLORS } from '../../../config/color';

export default function Card({title, created_at}) {
    return (
        <View style={styles.card}>
            <Text style={styles.txt_category}>1213</Text>
            <Text>{title}</Text>
            <Text>{created_at}</Text>
        </View>
    )
}


const styles = StyleSheet.create({
    card: {
        backgroundColor: 'white',
    },
    
    txt_category: { 
        color: MAIN_COLORS.red,
    }
});