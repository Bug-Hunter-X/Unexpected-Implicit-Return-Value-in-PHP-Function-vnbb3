function myFunc() {
  // Some code here...
  if (someCondition) {
    return null; // Explicitly return null
  } else {
    // ...more code that might throw an error...
    return $someValue; // Explicitly return a value
  }
} 