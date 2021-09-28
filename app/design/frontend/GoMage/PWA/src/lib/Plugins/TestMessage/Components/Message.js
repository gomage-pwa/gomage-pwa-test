import React  from 'react';
import {useMessage} from '../Model';

const TestMessage = () => {
    const {message} = useMessage();
    return (
        <div>{message}</div>
    );
}
export default TestMessage;
