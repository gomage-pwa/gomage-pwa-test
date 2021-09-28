import {useQuery} from "@apollo/client";
import GET_MASSAGE from "../Queries/getMessage.graphql";

/**
 *
 * @returns {{children: boolean, childIsLoading: boolean}|*}
 */
export const useMessage =() => {
    const { data } = useQuery(GET_MASSAGE, {
        variables: {}
    });
    if(data){
        return  data.testMessage;
    }
    return {message: false};
};

useMessage.propTypes = {
};
