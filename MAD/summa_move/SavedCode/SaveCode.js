function App() {
    let [locale, setLocale] = useState(Localization.locale);
    i18n.fallbacks = true;
    i18n.translations = {en, nl};
    i18n.locale = locale;
  
    return (
      <View style={styles.container}>
        {locale !== "en" ? <Button title="English" onPress={() => setLocale("en")} /> : undefined }
        {locale !== "nl" ? <Button title="Nederlands" onPress={() => setLocale("nl")} /> : undefined }
        <Text>{i18n.t('appName')}</Text>
        <Text>{i18n.t('welcome')}</Text>
        <StatusBar style="auto" />
      </View>
      
      
    );
  };

  const en = {
    appName: "translate",
    welcome: "Hello"
};

const nl = {
    welcome: "Hallo"
};

export {en, nl};